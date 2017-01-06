<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$teachers = [
			'張慶齡','許書齊','江彩怡','李宜芳','曾如','李孟珊','張庭寧','陳冠宇','吳崇岳','劉銘婠','鐘楚紅','陳淑貞','林牧音',
			'陳俊延','陳惠玲','張浩堂','謝耀霆','羅美雪','陳彭建中','楊惠閔','林桓妃','吳巧茹','林青良','董蘭英','曾志全','柯伊綺',
			'賴仲軒','黃森簇','黃承翰'
		];
        foreach ($teachers as $teacher) {
        	Teacher::create(['name'=>$teacher]);
        }
    }
}
