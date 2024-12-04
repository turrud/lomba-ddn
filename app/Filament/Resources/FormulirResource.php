<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormulirResource\Pages;
use App\Filament\Resources\FormulirResource\RelationManagers;
use App\Models\Formulir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class FormulirResource extends Resource
{
    protected static ?string $model = Formulir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('institution')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('domicile')
                    ->label('Domisili')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('event')
                    ->options([
                        'Flower Bouquet | 18 Dec | 13:00 | IDR 25.000' => 'Flower Bouquet | 18 Dec | 13:00 | IDR 25.000',
                        'Flower Bouquet | 18 Dec | 14:00 | IDR 25.000' => 'Flower Bouquet | 18 Dec | 14:00 | IDR 25.000',
                        'Lomba Sketsa A4 | 18 Dec | 15:00 | IDR 30.000' => 'Lomba Sketsa A4 | 18 Dec | 15:00 | IDR 30.000',
                        'Lomba Poster A3 | 19 Dec | 09:00 | IDR 30.000' => 'Lomba Poster A3 | 19 Dec | 09:00 | IDR 30.000',
                        'Mewarnai A | 19 Dec | 13:00 | IDR 30.000' => 'Mewarnai A | 19 Dec | 13:00 | IDR 30.000',
                        'Mewarnai B | 19 Dec | 15:00 | IDR 30.000' => 'Mewarnai B | 19 Dec | 15:00 | IDR 30.000',
                        'Painting Ashtray | 20 Dec | 13:00 | IDR 20.000' => 'Painting Ashtray | 20 Dec | 13:00 | IDR 20.000',
                        'Lomba Puisi | 20 Dec | 15:00 | IDR 30.000' => 'Lomba Puisi | 20 Dec | 15:00 | IDR 30.000',
                        'Mirror Decoration | 20 Dec | 15:00 | IDR 30.000' => 'Mirror Decoration | 20 Dec | 15:00 | IDR 30.000',
                    ])
                    ->label('Pilih Acara')
                    ->native(false)
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->label('Upload Bukti Transfer')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('institution')
                    ->searchable(),
                Tables\Columns\TextColumn::make('domicile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('event'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListFormulirs::route('/'),
            'create' => Pages\CreateFormulir::route('/create'),
            'edit' => Pages\EditFormulir::route('/{record}/edit'),
        ];
    }
}