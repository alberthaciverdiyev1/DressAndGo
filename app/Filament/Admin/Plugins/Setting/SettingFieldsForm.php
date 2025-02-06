<?php

namespace App\Filament\Admin\Plugins\Setting;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;

class SettingFieldsForm
{

    public static function get($data, bool $onlyHidden = false): array
    {
        $fields = [];
        unset($data['id'], $data['created_at'], $data['updated_at']);

        $columns = 2;
        $chunkedData = array_chunk($data, $columns, true);

        foreach ($chunkedData as $chunk) {
            $rowFields = [];

            foreach ($chunk as $key => $value) {
                $isHidden = str_starts_with($key, 'hide');

                if ($onlyHidden && !$isHidden) {
                    continue;
                }
                if (!$onlyHidden && $isHidden) {
                    continue;
                }

                $label = trans(ucwords(str_replace('_', ' ', $key)));

                $rowFields[] = $isHidden
                    ? Toggle::make($key)->label($label)->default($value)
                    : TextInput::make($key)->label($label)->default($value);
            }

            if (!empty($rowFields)) {
                $fields[] = \Filament\Forms\Components\Grid::make($columns)
                    ->schema($rowFields);
            }
        }

        return [Section::make($fields)];
    }

}


