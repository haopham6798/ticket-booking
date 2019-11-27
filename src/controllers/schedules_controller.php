<?php
    require_once('controllers/base_controller.php');
    require_once('models/schedule.php');

    class SchedulesController  extends BaseController {
        function __construct() {
            $this->folder = 'schedules';
        }

        public function index() {
            $schedules = Schedule::all();
            $data = array('schedules' => $schedules);
            $this->render('index', $data);
        }
      
    }
?>