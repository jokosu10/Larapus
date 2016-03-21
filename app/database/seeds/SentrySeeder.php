<?php 

/**
* 
*/
class SentrySeeder extends Seeder
{
	/* Setting Seeder*/
	
	public function run()
	{
		//hapus semua isi table
		DB::table('users_groups')->delete();
		DB::table('groups')->delete();
		DB::table('users')->delete();
		DB::table('throttle')->delete();

		try {
			//set group admin
			$group = Sentry::createGroup(array(
					'name' => 'admin',
					'permissions' => array(
							'admin' => 1,
						),
				));
			//set group regular
			$group = Sentry::createGroup(array(
					'name' => 'regular',
					'permissions' => array(
							'regular' => 1,
						),
				));
		} catch (Cartalyst\Sentry\Groups\NameRequiredException $e) {
			echo "Group Already Exsits";
		}

		try {
			//set admin baru
			$admin = Sentry::register(array(
				//set admin
				'email' => 'admin.perpus@gmail.com',
				'password' => '#larapus2014',
				'first_name' => 'Admin',
				'last_name' => 'Larapus'
				), true);

			//set group admin
			$adminGroup = Sentry::findGroupByName('admin');

			//masukan user ke group admin
			$admin->addGroup($adminGroup);

			//set user reguler baru
			$user = Sentry::register(array(
				//set user admin
				'email' => 'susilo.j8@gmail.com',
				'password' => '#larapus2014',
				'first_name' => 'Joko',
				'last_name' => 'Susilo'
			), true);

			//set grup regular
			$regularGroup = Sentry::findGroupByName('regular');

			//set user ke grup reguler
			$user->addGroup($regularGroup);
		} catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
			echo "Login Field is Required";
		} catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
			echo "Password Field is Required";
		} catch (Cartalyst\Sentry\Users\UserExistsException $e) {
			echo "User with this login already exists";
		} catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
			echo "Group was not found";
		}
	}
}