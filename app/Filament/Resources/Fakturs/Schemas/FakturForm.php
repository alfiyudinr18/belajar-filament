<?php

namespace App\Filament\Resources\Fakturs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use App\Models\Customer as CustomerModel;

class FakturForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("kode_faktur")
                ->columnSpan(2),
                DatePicker::make("tanggal_faktur"),
                Select::make("customer_id")
                    ->reactive()
                    ->relationship('customer', 'nama_customer')
                    ->afterStateUpdated(function ($state, $set) {
                        $customer = CustomerModel::find($state);
                        if ($customer) {
                            $set('kode_customer', $customer->kode_customer);
                        }
                    }),
                TextInput::make("kode_customer")
                ->columnSpan(2),
                Repeater::make('detail')
                ->relationship()
                ->columnSpan(2)
                ->schema([
                    Select::make('barang_id')
                    ->relationship('barang', 'nama_barang'),
                    TextInput::make('nama_barang'),
                    TextInput::make('harga')
                    ->numeric(),
                    TextInput::make('qty')
                    ->numeric(),
                    TextInput::make('hasil_qty')
                    ->numeric(),
                    TextInput::make('diskon')
                    ->numeric(),
                    TextInput::make('subtotal')
                    ->numeric(),
                ]),
                TextInput::make("ket_faktur")
                ->columnSpan(2),
                TextInput::make("total")
                ->columnSpan(2),
                TextInput::make("nominal_charge")
                ->columnSpan(2),
                TextInput::make("charge")
                ->columnSpan(2),
                TextInput::make("total_final")
                ->columnSpan(2),
            ]);
    }
}
