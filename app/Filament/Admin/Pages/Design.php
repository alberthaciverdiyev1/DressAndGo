<?php
namespace App\Filament\Admin\Pages;

use App\Filament\Admin\Plugins\Design\DesignFieldsForm;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Design extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clock';

    protected static string $view = 'filament.admin.pages.setting';

    public function getTitle(): string
    {
        return trans('Design');
    }

    public static function getNavigationLabel(): string
    {
        return trans('Design');
    }

    public static function getNavigationGroup(): ?string
    {
        return trans('Design');
    }

    public ?array $data = [];

    public function mount(): void
    {
        $this->data = \App\Models\Design::first()?->toArray() ?: [];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')->tabs([
                    Tabs\Tab::make('general')
                        ->label(trans('General Settings'))
                        ->icon('heroicon-o-cog-8-tooth')
                        ->schema(DesignFieldsForm::get($this->data, 'home'))
                        ->columns(1),

                    Tabs\Tab::make('How it Works')
                        ->label(trans('How it Works'))
                        ->icon('heroicon-o-eye-slash')
                        ->schema(DesignFieldsForm::get($this->data, 'how_it_work'))
                        ->columns(1),
                    Tabs\Tab::make('Deals of week')
                        ->label(trans('Deals of week'))
                        ->icon('heroicon-o-eye-slash')
                        ->schema(DesignFieldsForm::get($this->data, 'deal_of_the'))
                        ->columns(1),
                    Tabs\Tab::make('Subscribe')
                        ->label(trans('Subscribe'))
                        ->icon('heroicon-o-eye-slash')
                        ->schema(DesignFieldsForm::get($this->data, 'subscribe'))
                        ->columns(1),
                    Tabs\Tab::make('Sale page')
                        ->label(trans('Sale page'))
                        ->icon('heroicon-o-eye-slash')
                        ->schema(DesignFieldsForm::get($this->data, 'sale'))
                        ->columns(1),
                    Tabs\Tab::make('Blogs page')
                        ->label(trans('Blogs page'))
                        ->icon('heroicon-o-eye-slash')
                        ->schema(DesignFieldsForm::get($this->data, 'blog'))
                        ->columns(1),
                    Tabs\Tab::make('Cart page')
                        ->label(trans('Cart page'))
                        ->icon('heroicon-o-eye-slash')
                        ->schema(DesignFieldsForm::get($this->data, 'cart'))
                        ->columns(1),
                    Tabs\Tab::make('About page')
                        ->label(trans('About page'))
                        ->icon('heroicon-o-eye-slash')
                        ->schema(DesignFieldsForm::get($this->data, 'about'))
                        ->columns(1),



                ])->persistTab()->persistTabInQueryString()->id('setting'),
            ])->statePath('data');
    }


    protected function getFormActions(): array
    {
        return [
            Action::make('Save')
                ->label('Save')
                ->color('primary')
                ->submit('Update'),
        ];
    }

    public function update(): void
    {
        $formData = $this->form->getState();
        \App\Models\Setting::updateOrCreate(
            [],
            $formData
        );

        Notification::make()
            ->title(trans('History saved successfully.'))
            ->success()
            ->send();

        redirect(request()?->header('Referer'));
    }

}
