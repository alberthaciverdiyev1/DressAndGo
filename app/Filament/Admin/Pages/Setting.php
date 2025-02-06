<?php
namespace App\Filament\Admin\Pages;
//
//use Filament\Pages\Page;
//
//class Setting extends Page
//{
//    protected static ?string $navigationIcon = 'heroicon-o-document-text';
//
//}


use App\Filament\Admin\Plugins\Setting\SettingFieldsForm;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Setting extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clock';

    protected static string $view = 'filament.admin.pages.setting';

    public function getTitle(): string
    {
        return trans('Setting');
    }

    public static function getNavigationLabel(): string
    {
        return trans('Setting');
    }

    public static function getNavigationGroup(): ?string
    {
        return trans('Setting');
    }

    public ?array $data = [];

    public function mount(): void
    {
        $this->data = \App\Models\Setting::first()?->toArray() ?: [];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')->tabs([
                    Tabs\Tab::make('general')
                        ->label(trans('General Settings'))
                        ->icon('heroicon-o-cog-8-tooth')
                        ->schema(SettingFieldsForm::get($this->data, false))
                        ->columns(1),

                    Tabs\Tab::make('hidden')
                        ->label(trans('Hide Pages'))
                        ->icon('heroicon-o-eye-slash')
                        ->schema(SettingFieldsForm::get($this->data, true))
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
