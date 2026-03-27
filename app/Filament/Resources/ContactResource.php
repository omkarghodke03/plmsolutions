<?php
// app/Filament/Resources/ContactResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon  = 'heroicon-o-mail';
    protected static ?string $navigationLabel = 'Contact Requests';
    protected static ?string $navigationGroup = 'Submissions';
    protected static ?int    $navigationSort  = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->disabled(),
            Forms\Components\TextInput::make('email')->disabled(),
            Forms\Components\TextInput::make('service')->disabled(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('service'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Submitted')
                    ->dateTime('M j, Y g:ia')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('service')
                    ->options([
                        'CAD Design'               => 'CAD Design',
                        'BIM Modeling'             => 'BIM Modeling',
                        'Structural Detailing'     => 'Structural Detailing',
                        'Engineering Consultation' => 'Engineering Consultation',
                        'Other'                    => 'Other',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'view'  => Pages\ViewContact::route('/{record}'),
        ];
    }
}