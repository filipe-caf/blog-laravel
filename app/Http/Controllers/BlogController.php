<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{


  public function index()
  {

    $posts = array(
       array(
        'id' => 1,
        'author' => 'Filipe Fernandes',
        'date' => '20 de Janeiro de 2017',
        'title' => 'Instalando Composer no Windons',
        'subtitle' => 'Aprende como instalar o Composer no Windons!',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ornare, mi eget mollis malesuada, eros risus tincidunt elit, quis dapibus libero nunc eget nunc. Ut sit amet velit nisi. Proin sit amet eleifend metus. Proin ut risus ligula. Nullam auctor a lectus non aliquam. Fusce tempor leo quam, nec tincidunt orci ultrices ut. Nunc porta sed libero at tempor. Praesent imperdiet velit quis ligula vulputate, non iaculis velit ornare. Praesent quis consequat est. Pellentesque imperdiet congue leo. Sed et molestie lorem.<p>
Quisque nec rutrum nulla, ut efficitur urna. Nulla placerat ac urna quis sodales. Nam commodo finibus luctus. Nunc odio erat, rutrum quis congue non, porttitor vel justo. Nulla efficitur libero sit amet imperdiet tincidunt. Aenean dignissim ligula eget lorem gravida efficitur. Etiam sollicitudin, ipsum sed ultrices tristique, tortor metus mollis nulla, eu condimentum augue metus eget ex. Integer posuere leo nec orci lacinia placerat. Pellentesque viverra leo eu enim maximus gravida in non dui. Aenean mollis tincidunt pharetra.
Vivamus nec dignissim eros. Etiam vel sapien eget ex lobortis lacinia. Curabitur purus urna, tincidunt in accumsan ut, pulvinar et sem. Aliquam id porta libero. In porttitor vehicula leo in laoreet. Phasellus sed aliquam ex. Nam eleifend egestas faucibus. Mauris non massa id sapien vulputate tristique. Vivamus et urna et lectus tincidunt ornare. Nam id odio ut enim imperdiet feugiat. Nunc tristique lorem eget enim iaculis, a mattis est semper. Suspendisse eget mollis libero.
Donec eget orci odio. In aliquet odio nec congue molestie. In magna erat, dapibus a dictum at, auctor eu sem. Nullam sed orci lacinia, interdum lorem sit amet, dictum sem. Sed imperdiet enim vitae laoreet aliquam. Proin in augue semper, tempor ante quis, lacinia sem. Pellentesque placerat hendrerit pulvinar. Cras sit amet odio posuere, accumsan dolor sed, lobortis quam. Morbi dignissim auctor dolor, sit amet suscipit arcu dapibus at. Aenean lacus ipsum, scelerisque quis ipsum eu, gravida posuere quam. Suspendisse tempus feugiat ante. Praesent sit amet posuere tortor. Sed nec porta arcu, id ullamcorper eros.
Mauris tincidunt non urna et malesuada. Nunc id nulla massa. Morbi vulputate eu magna id pretium. Nam pellentesque sem nec libero pulvinar volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc lacus risus, blandit et nunc vel, laoreet aliquet lorem. Nulla accumsan, justo et dapibus faucibus, sem purus tempus lacus, ut fermentum erat urna quis massa. Cras dictum lacus a vehicula lacinia. Sed rutrum, justo sed tristique porta, urna odio mattis orci, vestibulum tempus ligula ex in enim. Donec nec tortor iaculis, consectetur erat quis, fermentum lacus. Nunc rhoncus elit et ante feugiat gravida. In id massa eget mi viverra porttitor. Fusce hendrerit nisl sed viverra lobortis. Morbi eu justo interdum, egestas sem eget, pharetra felis. Integer eu purus elementum, elementum diam in, tincidunt lorem. Nunc tempor elit non massa aliquet gravida.'
      ),
      array(
       'id' => 2,
       'author' => 'Filipe Fernandes',
       'date' => '21 de Janeiro de 2017',
       'title' => 'Instalando Laravel no Windons',
       'subtitle' => 'Aprende como instalar o Laravel no Windons!',
       'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ornare, mi eget mollis malesuada, eros risus tincidunt elit, quis dapibus libero nunc eget nunc. Ut sit amet velit nisi. Proin sit amet eleifend metus. Proin ut risus ligula. Nullam auctor a lectus non aliquam. Fusce tempor leo quam, nec tincidunt orci ultrices ut. Nunc porta sed libero at tempor. Praesent imperdiet velit quis ligula vulputate, non iaculis velit ornare. Praesent quis consequat est. Pellentesque imperdiet congue leo. Sed et molestie lorem.<p>
Quisque nec rutrum nulla, ut efficitur urna. Nulla placerat ac urna quis sodales. Nam commodo finibus luctus. Nunc odio erat, rutrum quis congue non, porttitor vel justo. Nulla efficitur libero sit amet imperdiet tincidunt. Aenean dignissim ligula eget lorem gravida efficitur. Etiam sollicitudin, ipsum sed ultrices tristique, tortor metus mollis nulla, eu condimentum augue metus eget ex. Integer posuere leo nec orci lacinia placerat. Pellentesque viverra leo eu enim maximus gravida in non dui. Aenean mollis tincidunt pharetra.
Vivamus nec dignissim eros. Etiam vel sapien eget ex lobortis lacinia. Curabitur purus urna, tincidunt in accumsan ut, pulvinar et sem. Aliquam id porta libero. In porttitor vehicula leo in laoreet. Phasellus sed aliquam ex. Nam eleifend egestas faucibus. Mauris non massa id sapien vulputate tristique. Vivamus et urna et lectus tincidunt ornare. Nam id odio ut enim imperdiet feugiat. Nunc tristique lorem eget enim iaculis, a mattis est semper. Suspendisse eget mollis libero.
Donec eget orci odio. In aliquet odio nec congue molestie. In magna erat, dapibus a dictum at, auctor eu sem. Nullam sed orci lacinia, interdum lorem sit amet, dictum sem. Sed imperdiet enim vitae laoreet aliquam. Proin in augue semper, tempor ante quis, lacinia sem. Pellentesque placerat hendrerit pulvinar. Cras sit amet odio posuere, accumsan dolor sed, lobortis quam. Morbi dignissim auctor dolor, sit amet suscipit arcu dapibus at. Aenean lacus ipsum, scelerisque quis ipsum eu, gravida posuere quam. Suspendisse tempus feugiat ante. Praesent sit amet posuere tortor. Sed nec porta arcu, id ullamcorper eros.
Mauris tincidunt non urna et malesuada. Nunc id nulla massa. Morbi vulputate eu magna id pretium. Nam pellentesque sem nec libero pulvinar volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc lacus risus, blandit et nunc vel, laoreet aliquet lorem. Nulla accumsan, justo et dapibus faucibus, sem purus tempus lacus, ut fermentum erat urna quis massa. Cras dictum lacus a vehicula lacinia. Sed rutrum, justo sed tristique porta, urna odio mattis orci, vestibulum tempus ligula ex in enim. Donec nec tortor iaculis, consectetur erat quis, fermentum lacus. Nunc rhoncus elit et ante feugiat gravida. In id massa eget mi viverra porttitor. Fusce hendrerit nisl sed viverra lobortis. Morbi eu justo interdum, egestas sem eget, pharetra felis. Integer eu purus elementum, elementum diam in, tincidunt lorem. Nunc tempor elit non massa aliquet gravida.'
     ),
     array(
      'id' => 3,
      'author' => 'Filipe Fernandes',
      'date' => '22 de Janeiro de 2017',
      'title' => 'Rodando o Laravel',
      'subtitle' => 'Criando sua primeira aplicação com o Laravel!',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ornare, mi eget mollis malesuada, eros risus tincidunt elit, quis dapibus libero nunc eget nunc. Ut sit amet velit nisi. Proin sit amet eleifend metus. Proin ut risus ligula. Nullam auctor a lectus non aliquam. Fusce tempor leo quam, nec tincidunt orci ultrices ut. Nunc porta sed libero at tempor. Praesent imperdiet velit quis ligula vulputate, non iaculis velit ornare. Praesent quis consequat est. Pellentesque imperdiet congue leo. Sed et molestie lorem.<p>
Quisque nec rutrum nulla, ut efficitur urna. Nulla placerat ac urna quis sodales. Nam commodo finibus luctus. Nunc odio erat, rutrum quis congue non, porttitor vel justo. Nulla efficitur libero sit amet imperdiet tincidunt. Aenean dignissim ligula eget lorem gravida efficitur. Etiam sollicitudin, ipsum sed ultrices tristique, tortor metus mollis nulla, eu condimentum augue metus eget ex. Integer posuere leo nec orci lacinia placerat. Pellentesque viverra leo eu enim maximus gravida in non dui. Aenean mollis tincidunt pharetra.
Vivamus nec dignissim eros. Etiam vel sapien eget ex lobortis lacinia. Curabitur purus urna, tincidunt in accumsan ut, pulvinar et sem. Aliquam id porta libero. In porttitor vehicula leo in laoreet. Phasellus sed aliquam ex. Nam eleifend egestas faucibus. Mauris non massa id sapien vulputate tristique. Vivamus et urna et lectus tincidunt ornare. Nam id odio ut enim imperdiet feugiat. Nunc tristique lorem eget enim iaculis, a mattis est semper. Suspendisse eget mollis libero.
Donec eget orci odio. In aliquet odio nec congue molestie. In magna erat, dapibus a dictum at, auctor eu sem. Nullam sed orci lacinia, interdum lorem sit amet, dictum sem. Sed imperdiet enim vitae laoreet aliquam. Proin in augue semper, tempor ante quis, lacinia sem. Pellentesque placerat hendrerit pulvinar. Cras sit amet odio posuere, accumsan dolor sed, lobortis quam. Morbi dignissim auctor dolor, sit amet suscipit arcu dapibus at. Aenean lacus ipsum, scelerisque quis ipsum eu, gravida posuere quam. Suspendisse tempus feugiat ante. Praesent sit amet posuere tortor. Sed nec porta arcu, id ullamcorper eros.
Mauris tincidunt non urna et malesuada. Nunc id nulla massa. Morbi vulputate eu magna id pretium. Nam pellentesque sem nec libero pulvinar volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc lacus risus, blandit et nunc vel, laoreet aliquet lorem. Nulla accumsan, justo et dapibus faucibus, sem purus tempus lacus, ut fermentum erat urna quis massa. Cras dictum lacus a vehicula lacinia. Sed rutrum, justo sed tristique porta, urna odio mattis orci, vestibulum tempus ligula ex in enim. Donec nec tortor iaculis, consectetur erat quis, fermentum lacus. Nunc rhoncus elit et ante feugiat gravida. In id massa eget mi viverra porttitor. Fusce hendrerit nisl sed viverra lobortis. Morbi eu justo interdum, egestas sem eget, pharetra felis. Integer eu purus elementum, elementum diam in, tincidunt lorem. Nunc tempor elit non massa aliquet gravida.'
    )
    );

    return view('index', compact('posts'));
  }

  public function post($title, $subtitle, $text)
  {
    //$titulo = $posts[0]['title'];
    return view('post', ['title'=>$title, 'subtitle' =>$subtitle,'text'=>$text]);
  }
}
