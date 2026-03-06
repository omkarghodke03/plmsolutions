<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupportTicketResource\Pages;
use App\Filament\Resources\SupportTicketResource\RelationManagers;
use App\Models\SupportTicket;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SupportTicketResource extends Resource
{
    protected static ?string $model = SupportTicket::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('customer_name')->required(),
            Forms\Components\TextInput::make('customer_email')->email()->required(),
            Forms\Components\TextInput::make('subject')->required()->columnSpan(2),
            Forms\Components\Textarea::make('message')->required()->columnSpan(2),
            Forms\Components\Select::make('status')
                ->options([
                    'new' => 'New',
                    'open' => 'Open',
                    'closed' => 'Closed',
                ])->required(),
        ]);
}

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('customer_name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('subject')->searchable(),
            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'primary' => 'new',
                    'warning' => 'open',
                    'success' => 'closed',
                ]),
            Tables\Columns\TextColumn::make('created_at')->dateTime('Y-m-d')->sortable()->label('Date Received'),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSupportTickets::route('/'),
            'create' => Pages\CreateSupportTicket::route('/create'),
            'edit' => Pages\EditSupportTicket::route('/{record}/edit'),
        ];
    }    
}
