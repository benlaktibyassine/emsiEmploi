<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_prof',
        'id_jour',
        'heure_debut',
        'heure_fin',
    ];
    public static function getAvailableTimeSlots($idProf)
    {
        $availableTimeSlots = collect();

        // Get all time slots for a professor on any day
        $allTimeSlots = static::where('id_prof', $idProf)->get();

        // Loop through the day and check availability
        foreach (Jour::all() as $jour) {
            $dayTimeSlots = $allTimeSlots->where('id_jour', $jour->id);

            // If the professor is not available for the entire day, add available time slots
            if ($dayTimeSlots->isEmpty()) {
                $availableTimeSlots->push([
                    'id_jour' => $jour->id,
                    'jour_name' => $jour->name,
                    'available_slots' => [['heure_debut' => '00:00', 'heure_fin' => '23:59']],
                ]);
            } else {
                // Check available time slots for the day
                $dayAvailableTimeSlots = [];

                // Assuming the day starts at 00:00
                $startTime = '00:00';

                foreach ($dayTimeSlots as $timeSlot) {
                    // Add the available time between previous end time and current start time
                    $dayAvailableTimeSlots[] = [
                        'heure_debut' => $startTime,
                        'heure_fin' => $timeSlot->heure_debut,
                    ];

                    // Update the start time for the next iteration
                    $startTime = $timeSlot->heure_fin;
                }

                // Add the available time after the last booked slot until the end of the day
                $dayAvailableTimeSlots[] = [
                    'heure_debut' => $startTime,
                    'heure_fin' => '23:59',
                ];

                $availableTimeSlots->push([
                    'id_jour' => $jour->id,
                    'jour_name' => $jour->name,
                    'available_slots' => $dayAvailableTimeSlots,
                ]);
            }
        }

        return $availableTimeSlots;
    }
}
