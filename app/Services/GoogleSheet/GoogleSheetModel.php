<?php

namespace App\Services\GoogleSheet;

use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;

class GoogleSheetModel
{
    protected Sheets $service;
    protected string $spreadsheetId;
    protected string $range;

    public function __construct(string $range)
    {
        $this->spreadsheetId = $this->getSpreadsheetId();
        $this->range = $range;
        $this->service = app(GoogleSheetService::class)->getService();
    }

    protected function getSpreadsheetId(): string
    {
        return ''; // це буде замінено в дочірньому класі
    }

    public function readSheet(): array
    {
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $this->range);
        return $response->getValues() ?? [];
    }

    public function writeSheet(array $values): mixed
    {
        $body = new ValueRange(['values' => $values]);
        $params = ['valueInputOption' => 'RAW'];
        return $this->service->spreadsheets_values->update(
            $this->spreadsheetId,
            $this->range,
            $body,
            $params
        );
    }

    public function readAssoc(): array
    {
        $rows = $this->readSheet();
        if (count($rows) < 2) return [];

        $headers = array_shift($rows);
        $data = [];

        foreach ($rows as $row) {
            $data[] = array_combine($headers, $row + array_fill(0, count($headers), null));
        }

        return $data;
    }
}
