<?php
// test or it
use App\Models\Employer;
use App\Models\Job;


it('belongs to employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id]
    );
    // Act
    expect($job->employer->is($employer))->toBeTrue();
    // Assert
});

it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('test');
    expect($job->tags)->toHaveCount(1);
});
