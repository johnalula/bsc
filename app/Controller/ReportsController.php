<?php
App::uses('AppController', 'Controller');
/**
 * ProjectsTasks Controller
 *
 * @property ProjectsTask $ProjectsTask
 */
class ReportsController extends AppController {
public $helpers = array('Js');
public function index() {
        $targets=array();
       $this->set('rows',$targets);
      if ($this->request->is('post') || $this->request->is('put')) {
           $targets=$this->Report->query("SELECT p.perspective_name, o.objective_name, m.measure_name, u.name, f.frequency_name, pr.period_name, t.baseline, t.target, t.actual_value, t.period_id, t.office_id, t.year FROM perspectives as p, objectives as o, measures as m, units as u, frequencies as f, periods as pr, targets as t where t.office_id = ".$this->request->data('Report.office_id')." and t.year = ".$this->request->data('Report.year_id')." and  t.period_id = ".$this->request->data('Report.period_id')." and o.id = t.objective_id and o.perspective_id = p.id and m.id = t.measure_id and m.unit_id = u.id and t.period_id = pr.id and pr.frequency_id = f.id ;");
         $this->set('rows',$targets);
        }   
           $years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
	$offices = $this->Report->Office->find('list');	
       // $frequencies = $this->Report->Frequency->find('list');	
        $periods = $this->Report->Period->find('list');	
        $this->set(compact('offices', 'frequencies', 'periods','year'));
}
public function report(){
   $targets=array();
   
       $this->set('rows',$targets);
      if ($this->request->is('post') || $this->request->is('put')) {
           $targets=$this->Report->query("SELECT p.perspective_name, o.objective_name, m.measure_name, u.name, f.frequency_name, pr.period_name, t.baseline, t.target, t.actual_value, t.period_id, t.office_id, t.year FROM perspectives as p, objectives as o, measures as m, units as u, frequencies as f, periods as pr, targets as t where t.office_id = ".$this->UserAuth->getUserOfficeId()." and t.year = ".$this->request->data('Report.year_id')." and  t.period_id = ".$this->request->data('Report.period_id')." and o.id = t.objective_id and o.perspective_id = p.id and m.id = t.measure_id and m.unit_id = u.id and t.period_id = pr.id and pr.frequency_id = f.id ;");
         $this->set('rows',$targets);
         $thresholds =$this->Report->query("SELECT t.performance, t.lower, t.upper, t.background from thresholds t");
	$this->set('thresholds',$thresholds);
        }   
           $years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
	$offices = $this->Report->Office->find('list');	
       // $frequencies = $this->Report->Frequency->find('list');	
        $periods = $this->Report->Period->find('list');	
        $officename=$this->UserAuth->getUserOfficeName();
        $this->set('officename',$officename);
        $this->set(compact('offices', 'frequencies', 'periods','year'));
}

public function personala(){
	$activitys=array();
	$behaviors=array();
	$this->set('rows',$activitys);
	$this->set('behaves',$behaviors);	
      if ($this->request->is('post') || $this->request->is('put')) {
		
           $activitys=$this->Report->query("SELECT p.perspective_name, o.objective_name, m.measure_name, f.frequency_name, pr.period_name, ac.activity, ac.weight, ace.activity_id, ace.self, ace.pear, ace.head, ace.office_id, ace.year, ace.period_id FROM perspectives as p, objectives as o, measures as m, frequencies as f, periods as pr, activities as ac, activityevaluationvalues as ace WHERE ace.office_id = ".$this->request->data('Report.office_id')." and ace.user_id = ".$this->request->data('Report.user_id')." and ace.year = ".$this->request->data('Report.year')." and ace.period_id = ".$this->request->data('Report.period_id')." and ace.activity_id = ac.id and o.id = ac.objective_id and o.perspective_id = p.id and m.id = ac.measure_id and pr.id = ace.period_id and pr.frequency_id = f.id;");
	$this->set('rows',$activitys);
	$behaviors=$this->Report->query("SELECT u.first_name, u.last_name, p.period_name, b.self, b.pear, b.head from users as u, behaveiorevaluations as b, periods as p where b.user_id = ".$this->request->data('Report.user_id')." and b.period_id = ".$this->request->data('Report.period_id')." and b.year = ".$this->request->data('Report.year')." and u.id = b.user_id and p.id = b.period_id ;");
	$this->set('behaves',$behaviors);	
        }   
	$years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
	$offices = $this->Report->Office->find('list');	
        //$users = $this->Report->User->find('list');	
        $periods = $this->Report->Period->find('list');	
        $this->set(compact('offices', 'periods','year'));

}
public function personal(){
 $activitys=array();
 $behaviors=array();
	$this->set('rows',$activitys);
	$this->set('behaves',$behaviors);	
      if ($this->request->is('post') || $this->request->is('put')) {
           $activitys=$this->Report->query("SELECT p.perspective_name, o.objective_name, m.measure_name, f.frequency_name, pr.period_name, ac.activity_name, ac.baseline, ac.target, ac.acomplishment, ac.office_id, ac.year, ac.period_id FROM perspectives as p, objectives as o, measures as m, frequencies as f, periods as pr, majoractivities as ac WHERE ac.office_id = ".$this->request->data('Report.office_id')." and ac.user_id = ".$this->request->data('Report.user_id')." and ac.year = ".$this->request->data('Report.year')." and ac.period_id = ".$this->request->data('Report.period_id')." and o.id = ac.objective_id and o.perspective_id = p.id and m.id = ac.measure_id and pr.id = ac.period_id and pr.frequency_id = f.id;");
	$this->set('rows',$activitys);
	/*$behaviors=$this->Report->query("SELECT bc.criteria_name, et.evaluation_name, rk.rank_value, be.remark, p.period_name from behaviorevaluationcriterias as bc, behaviorevaluations as be, evaluationranks as rk, evaluationtypes as et, periods as p where be.user_id = ".$this->request->data('Report.user_id')." and be.period_id = ".$this->request->data('Report.period_id')." and p.id = be.period_id and be.behaviorevaluationcriteria_id = bc.id and be.evaluationtype_id = et.id and be.evaluationrank_id = rk.id;");
	$this->set('behaves',$behaviors);*/	
        }   
	$years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
	$offices = $this->Report->Office->find('list');	
        $users = $this->Report->User->find('list');	
        $periods = $this->Report->Period->find('list');	
        $this->set(compact('offices', 'users', 'periods','year'));
}
public function download($office,$year,$period){
   $targetsd=$this->Report->query("SELECT p.perspective_name, o.objective_name, m.measure_name, u.name, f.frequency_name, pr.period_name, t.baseline, t.target, t.actual_value, t.period_id, t.office_id, t.year, of.office_name FROM perspectives as p, objectives as o, measures as m, units as u, frequencies as f, periods as pr, targets as t, offices as of where t.office_id = ".$office." and t.year = ".$year." and  t.period_id = ".$period." and o.id = t.objective_id and o.perspective_id = p.id and m.id = t.measure_id and m.unit_id = u.id and t.period_id = pr.id and pr.frequency_id = f.id and of.id = t.office_id ;");
         $this->set('datas',$targetsd); 
}
public function predefined(){
}
public function office(){
}
public function measurof(){
	if ($this->request->is('post') || $this->request->is('put')) {
		

	}
	$years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
	
        //$periods = $this->Report->Period->find('list');	
        $officename=$this->UserAuth->getUserOfficeName();
        $this->set('officename',$officename);
        $this->set(compact('year'));
}   
public function objectiveof(){
	if ($this->request->is('post') || $this->request->is('put')) {
		

	}
	$years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
	
        //$periods = $this->Report->Period->find('list');	
        $officename=$this->UserAuth->getUserOfficeName();
        $this->set('officename',$officename);
        $this->set(compact('year'));
}  
public function perspectiveof(){
	if ($this->request->is('post') || $this->request->is('put')) {
		

	}
	$years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
	
        //$periods = $this->Report->Period->find('list');	
        $officename=$this->UserAuth->getUserOfficeName();
        $this->set('officename',$officename);
        $this->set(compact('year'));
}  
public function themeof(){
	if ($this->request->is('post') || $this->request->is('put')) {
		

	}
	$years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
	
        //$periods = $this->Report->Period->find('list');	
        $officename=$this->UserAuth->getUserOfficeName();
        $this->set('officename',$officename);
        $this->set(compact('year'));
}
}
