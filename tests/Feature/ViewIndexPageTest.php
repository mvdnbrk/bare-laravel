<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewIndexPageTest extends TestCase
{
    /** @test */
    public function it_can_get_the_index_page()
    {
        $this->get('/')->assertStatus(200);
    }
}
