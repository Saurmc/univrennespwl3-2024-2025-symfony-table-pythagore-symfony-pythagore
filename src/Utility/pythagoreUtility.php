<?php
namespace App\Utility;

class pythagoreUtility
{
    public function display(): string
    {
        $tab = "<html><head><title>Table de pithagore</title></head>";
        $tab .= "<body><h1>Marcus DECLAUDE</h1><table><tr>";
        // Loop through rows
        for ($i = 0; $i <= 10; $i++) {
            $tab .= "<th>$i</th>";
        }
        
        $tab .= "</tr>";
        for ($i = 0; $i <= 10; $i++) {
            $tab .= "<tr>";
            $tab .= "<th>$i</th>";
        }

            
            // Loop through columns
            for ($j = 0; $j <= 10; $j++) {
                // Check if row index equals column index
                if ($i == $j && $i != 0 && $j != 0) {
                    $tab .= "<td>X</td>";
                } else {
                    $tab .= "<td>" . ($i * $j) . "</td>";
                }
            }
            
            $tab .= "</tr>";
        
        
        $tab .= "</table>";
        $tab .= "</body></html>";
        return $tab;
    }
}
