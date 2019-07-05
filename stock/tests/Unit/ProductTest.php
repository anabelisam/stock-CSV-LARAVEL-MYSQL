<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    public function testProcessCommand()
    {
        $command = 'restar';
        switch($command){
            case 'Agregar':
                $this->assertTrue(true);
            break;
            case 'Restar':
            case 'restar':
                $this->assertTrue(true);
            break;
            case 'Activar':
                $this->assertTrue(true);
            break;
            case 'Desactivar':
                $this->assertTrue(true);
            break;
            default:
                $this->assertTrue(false);
            break;
        }
    }

}
