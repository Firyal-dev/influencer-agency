<?php

namespace App\Filament\Resources\Clients;

use App\Filament\Resources\Clients\Pages\ListClients;
use App\Filament\Resources\Clients\Pages\ViewClient;
use App\Filament\Resources\Clients\Schemas\ClientForm;
use App\Filament\Resources\Clients\Schemas\ClientInfolist;
use App\Filament\Resources\Clients\Tables\ClientsTable;
use App\Models\Client;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $recordTitleAttribute = 'Client';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'Clients';

    protected static ?string $pluralModelLabel = 'Clients';

    public static function form(Schema $schema): Schema
    {
        return ClientForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ClientInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClientsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Clients register through the application, not created in admin
    }

    public static function canEdit($record): bool
    {
        return false; // Client data is read-only
    }

    public static function canDelete($record): bool
    {
        return false; // Client data is read-only
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClients::route('/'),
            // 'create' => CreateClient::route('/create'),
            'view' => ViewClient::route('/{record}'),
            // 'edit' => EditClient::route('/{record}/edit'),
        ];
    }
}
