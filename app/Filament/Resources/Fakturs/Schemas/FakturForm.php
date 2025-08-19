<?php

namespace App\Filament\Resources\Fakturs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;

class FakturForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("kode_faktur"),
                DatePicker::make("tanggal_faktur"),
                TextInput::make("kode_customer"),
                Select::make("customer_id")
                    ->relationship('customer', 'nama_customer'),
                TextInput::make("ket_faktur"),
                TextInput::make("total"),
                TextInput::make("nominal_charge"),
                TextInput::make("charge"),
                TextInput::make("total_final"),
            ]);
    }
}
