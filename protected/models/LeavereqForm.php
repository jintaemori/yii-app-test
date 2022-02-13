<?php
class LeavereqForm extends CFormModel
{
	public $reason;
	public $startdate;
	public $enddate;
	public $type;

	private $_identity;


	public function rules()
	{
		return array(
			array('reason, startdate, enddate, type', 'required'),
		);
	}


	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function leavereq()
	{
		$u = Yii::app()->user->id;
		$criteria = array('condition' => "username = '$u'");
		$comments = User::model()->find($criteria);
		$id = $comments->id;
		$connection=new CDbConnection('mysql:host=localhost','root','saisasank');
		$connection->active=true;
		$command = $connection->createCommand("use testdrive; INSERT INTO tbl_leavereq (id, reason, startdate, enddate, type) VALUES ('$id', '$this->reason', '$this->startdate', '$this->enddate', '$this->type');");
		$command->execute();
	}
}