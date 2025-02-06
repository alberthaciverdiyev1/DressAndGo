<?php

namespace App\Filament\Admin\Plugins\Design;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;

class DesignFieldsForm
{

    public static function get($data, string $tabName): array
    {
        $fields = [];
        unset($data['id'], $data['created_at'], $data['updated_at']);

        $columns = 1;
        $chunkedData = array_chunk($data, $columns, true);

            $rowFields = [];

            foreach ($data as $key => $value) {
                $startWith = str_starts_with($key, $tabName);

                if (!$startWith) {
                    continue;
                }

                $label = trans(ucwords(str_replace('_', ' ', $key)));
                if (str_ends_with($key, 'image') || str_ends_with($key, 'icon')) {
                    $rowFields[] = FileUpload::make($key)->label($label)->default($value);
                }elseif (str_ends_with($key, 'title') || str_ends_with($key, 'percent')) {
                    $rowFields[] = TextInput::make($key)->label($label)->default($value);
                }elseif (str_ends_with($key, 'description')) {
                    $rowFields[] = RichEditor::make($key)->label($label)->default($value);
                }else if(str_ends_with($key, 'time') || str_ends_with($key, 'date')) {
                    $rowFields[] = DateTimePicker::make($key)->label($label)->default($value);
                }else if(str_ends_with($key, 'text')) {
                    $rowFields[] = Textarea::make($key)->label($label)->default($value);
                }
            }

            if (!empty($rowFields)) {
                $fields[] = \Filament\Forms\Components\Grid::make($columns)
                    ->schema($rowFields);
            }

        return [Section::make($fields)];
    }

}


