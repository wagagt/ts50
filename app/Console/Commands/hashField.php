<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use App\Models\Users;

class hashField extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'hashField';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command to hash field of table.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		//
		$this->info("run command.....");
		foreach(Users::all() as $user)
		{
		    //$user->password = \Hash::make($user->password);
		    $this->info('Hashd password for user ... '.$user->name);
		    $this->info('hash ' . $user->password);
		    $user->save();
		}

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['example', InputArgument::REQUIRED, 'An example argument.'],
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		];
	}

}
