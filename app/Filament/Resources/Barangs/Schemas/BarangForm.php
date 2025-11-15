<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_barang')
                    ->required()
                    ->label('Nama')
                    ->placeholder('Masukan Nama Barang'),
                TextInput::make('kode_barang')
                    ->required()
                    ->numeric()
                    ->label('Kode')
                    ->placeholder('Masukan Kode Barang'),
                TextInput::make('harga_barang')
                    ->required()
                    ->label('Harga')
                    ->placeholder('Masukan Harga'),
            ]);
    }
}
