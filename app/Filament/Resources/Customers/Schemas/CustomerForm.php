<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_customer')
                    ->required()
                    ->label('Nama')
                    ->placeholder('Masukan Nama Customer'),
                TextInput::make('kode_customer')
                    ->required()
                    ->numeric()
                    ->label('Kode')
                    ->placeholder('Masukan Kode Customer'),
                TextInput::make('alamat_customer')
                    ->required()
                    ->label('Alamat')
                    ->placeholder('Masukan Alamat Customer'),
                TextInput::make('telepon_customer')
                    ->required()
                    ->label('Telepon')
                    ->placeholder('Masukan Telepon Customer'),
            ]);
    }
}
