<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EquipementResource\Pages;
use App\Filament\Resources\EquipementResource\RelationManagers;
use App\Models\Equipement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class EquipementResource extends Resource
{
    protected static ?string $model = Equipement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                ->schema([
                    TextInput::make('num_serie'),
                    TextInput::make('designation_equipement'),
                    TextInput::make('nom_equipement'),
                    TextInput::make('type_equipement'),
                    TextInput::make('date_acq'),
                    TextInput::make('localisation_equipement'),
                    TextInput::make('matricule')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('num_serie')->sortable()->searchable(),
                TextColumn::make('designation_equipement')->sortable()->searchable(),
                TextColumn::make('nom_equipement')->sortable()->searchable(),
                TextColumn::make('type_equipement')->sortable()->searchable(),
                TextColumn::make('date_acq')->sortable()->searchable(),
                TextColumn::make('localisation_equipement')->sortable()->searchable(),
                TextColumn::make('matricule')->sortable()->searchable()

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEquipements::route('/'),
            'create' => Pages\CreateEquipement::route('/create'),
            'edit' => Pages\EditEquipement::route('/{record}/edit'),
        ];
    }
}