<?php 
	
	require '../vendor/autoload.php';
    require '../vendor/laravel/Macroable.php';
    require '../vendor/laravel/HtmlBuilder.php';

	use Styde\User;
	use Styde\HtmlNode;
    use Styde\LunchBox;
    use Styde\Food;
    use Laravel\HtmlBuilder;


	/*$user = new User();

	$user->fill([
		'first_name' => 'Duilio',
		'last_name' => 'Palacios'
	]);

	$user->nickname = "Silencee";

	unset($user->nickname);

	var_dump($user);

	echo "<p>Nickname: {$user->nickname}</p>";

	echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

	if (isset($user->nickname)) 
	{
		echo "<p>Nickname: {$user->nickname}</p>";
	}*/


	/*$node = (new HtmlNode('textarea','Styde'))
	->name('content')
	->id('content');*/


    /*$node = HtmlNode::textarea('Styde')
        ->name('algo')
        ->id('contenido');
    var_dump($node('name'), $node('width', 100));*/

    /*$user = new User(['name' => 'Duilio', 'email' => 'admin@styde.net']);
    $user->id = 10;
    echo $result = serialize($user);
    file_put_contents('../storage/user.txt', $result);*/


    /*$gordon = new User(['name' => 'Gordon']);
    // Daughters

    $joanie = new User(['name' => 'Joanie']);
    $haley = new User(['name' => 'Haley']);

    $lunchBox = new LunchBox(['Sandwich']);
    $lunchBox2 = clone($lunchBox);

    // House
    $joanie->setLunch($lunchBox);
    $haley->setLunch($lunchBox2);

    // School
    // ...
    $joanie->eat();
    $haley->eat();
    var_dump($lunchBox, $lunchBox2);*/

    /*$gordon = new User(['name' => 'Gordon']);

    // Daughter
    $joanie = new User(['name' => 'Joanie']);

    $lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

    // House
    $joanie->setLunch($lunchBox);

    // School
    $joanie->eatMeal();*/


    /*$gordon = new User(['name' => 'Gordon']);

    // Daughter
    $joanie = new User(['name' => 'Joanie']);

    $lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);


    $lunchBox = new LunchBox([
            new Food(['name' => 'Sandwich', 'beverage' => false]),
            new Food(['name' => 'Papas']),
            new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
            new Food(['name' => 'Manzana']),
            new Food(['name' => 'Agua', 'beverage' => true]),
    ]);

    // House
    $joanie->setLunch($lunchBox);

    // School
    $joanie->eatMeal();*/


    $html = new HtmlBuilder();

    HtmlBuilder::macro('success', function ($message){
        return "<p style=\"background-color: #dff0d8; border-color: #d0e9c6; color: #3c763d; padding: 10px\">
        {$message}</p>" . $this->hr();
    });

    echo $html->success("Todo salió bien"); 


?>