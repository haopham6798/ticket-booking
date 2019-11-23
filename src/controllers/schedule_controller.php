<?php
    require_once('/controllers/base_controller.php');
    require_once('/models/schedule.php');

    class ScheduleController  extends BaseController {
        function __construct() {
            $this->folder = 'schedule';
        }

        static function index() {
            $schedules = Schedule::all();
            $data = array('schedule' =>$schedules);
            $this->render('index', $data);
        }
    }
?>