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
		$connection=new CDbConnection('mysql:host=localhost','root','saisasank');
		$connection->active=true;
		$command = $connection->createCommand("use testdrive; INSERT INTO tbl_user (username, password, email) VALUES ('$this->reason', 'pass32', 'test32@example.com');");
		$command->execute();
	}
}