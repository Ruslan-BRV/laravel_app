<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develops';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $this->prepareData();





        return 0;
    }

    public function prepareData ()
    {
        $position1 = Position::create([
            'title' => 'Developer',
        ]);
        $position2 = Position::create([
            'title' => 'Manager',
        ]);
        $position3 = Position::create([
            'title' => 'Designer',
        ]);

        $workerData1 = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'Ivan@mail.ru',
            'position_id' => $position1->id,
            'age' => 20,
            'description' => 'Description',
            'is_married' => false,
        ];
        $workerData2 = [
            'name' => 'Karl',
            'surname' => 'Petrov',
            'email' => 'Petrov@mail.ru',
            'position_id' => $position2->id,
            'age' => 21,
            'description' => 'Description',
            'is_married' => false,
        ];
        $workerData3 = [
            'name' => 'Kate',
            'surname' => 'Krutaya',
            'email' => 'Krutaya@mail.ru',
            'position_id' => $position1->id,
            'age' => 24,
            'description' => 'Description',
            'is_married' => false,
        ];
        $workerData4 = [
            'name' => 'Ivan',
            'surname' => 'Petrov',
            'email' => 'Ivan@mail.ru',
            'position_id' => $position3->id,
            'age' => 20,
            'description' => 'Description',
            'is_married' => false,
        ];
        $workerData5 = [
            'name' => 'Karl',
            'surname' => 'Krutaya',
            'email' => 'Kate@mail.ru',
            'position_id' => $position3->id,
            'age' => 21,
            'description' => 'Description',
            'is_married' => false,
        ];
        $workerData6 = [
            'name' => 'Kate',
            'surname' => 'Krutaya',
            'email' => 'Krutaya@mail.ru',
            'position_id' => $position1->id,
            'age' => 24,
            'description' => 'Description',
            'is_married' => false,
        ];
        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);
        $worker4 = Worker::create($workerData4);
        $worker5 = Worker::create($workerData5);
        $worker6 = Worker::create($workerData6);

        $profileData1 = [
            'worker_id' => $worker1->id,
            'sity' => 'Tokio',
            'skill' => 'Coder',
            'experience' => 5,
            'finished_study_at' => '2020-06-01',
        ];
        $profileData2 = [
            'worker_id' => $worker2->id,
            'sity' => 'Rio',
            'skill' => 'Boss',
            'experience' => 7,
            'finished_study_at' => '2014-06-01',
        ];
        $profileData3 = [
            'worker_id' => $worker3->id,
            'sity' => 'Moscow',
            'skill' => 'Frontend',
            'experience' => 7,
            'finished_study_at' => '2018-06-01',
        ];
        $profileData4 = [
            'worker_id' => $worker4->id,
            'sity' => 'Tokio',
            'skill' => 'Coder',
            'experience' => 5,
            'finished_study_at' => '2020-06-01',
        ];
        $profileData5 = [
            'worker_id' => $worker5->id,
            'sity' => 'Rio',
            'skill' => 'Boss',
            'experience' => 7,
            'finished_study_at' => '2014-06-01',
        ];
        $profileData6 = [
            'worker_id' => $worker6->id,
            'sity' => 'Moscow',
            'skill' => 'Frontend',
            'experience' => 7,
            'finished_study_at' => '2018-06-01',
        ];

        Profile::create($profileData1);
        Profile::create($profileData2);
        Profile::create($profileData3);
        Profile::create($profileData4);
        Profile::create($profileData5);
        Profile::create($profileData6);

    }
}
