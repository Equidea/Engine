<?php

namespace Equidea\Service;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Service
 */
class AgeCalculator {
    
    /**
     * @var array
     */
    private $years = [
        'singular' => 'Jahr',
        'plural' => 'Jahre'
    ];
    
    /**
     * @var array
     */
    private $months = [
        'singular' => 'Monat',
        'plural' => 'Monate'
    ];
    
    /**
     * @var array
     */
    private $weeks = [
        'singular' => 'Woche',
        'plural' => 'Wochen'
    ];
    
    /**
     * @param   array   $years
     * @param   array   $months
     * @param   array   $weeks
     */
    public function __construct
    (
        array $years = null,
        array $months = null,
        array $weeks = null
    ) {
        // For years
        if ($years != null) {
            $this->years = $years;
        }
        
        // For months
        if ($months != null) {
            $this->months = $months;
        }
        
        // For weeks
        if ($weeks != null) {
            $this->weeks = $weeks;
        }
    }
    
    /**
     * @param   int $age
     *
     * @return  array
     */
    public function formatAge($age)
    {
        // Calculate the age in years
        $restYears = $age % 48;
        $years = ($age - $restYears) / 48;
        
        // Calculate the age in months
        $restMonths = $restYears % 4;
        $months = ($restYears - $restMonths) / 4;
        
        // Return a response array with the formated age
        return [
            'years' => $years,
            'months' => $months,
            'weeks' => $restMonths
        ];
    }
    
    /**
     * @param   int $age
     *
     * @return  array
     */
    public function calculateAge($age)
    {
        // Format age from weeks to y-m-w
        $format = $this->formatAge($age);
        
        // Get the subjects for the age
        $years = ($format['years'] === 1) ? $this->years[0] : $this->years[1];
        $months = ($format['months'] === 1) ? $this->months[0] : $this->months[1];
        $weeks = ($format['weeks'] === 1) ? $this->weeks[0] : $this->weeks[1];
        
        // Return an array with the age and the related subjects
        return [
            'years' => ['age' => $format['years'], 'subject' => $years],
            'months' => ['age' => $format['months'], 'subject' => $months],
            'weeks' => ['age' => $format['weeks'], 'subject' => $weeks]
        ];
    }
}