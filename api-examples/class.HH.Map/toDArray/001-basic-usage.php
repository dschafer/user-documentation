<?hh // partial

namespace Hack\UserDocumentation\API\Examples\Map\ToArray;

<<__EntryPoint>>
function main(): void {
  $m = Map {
    'red' => '#ff0000',
    'green' => '#00ff00',
    'blue' => '#0000ff',
    'yellow' => '#ffff00',
    'purple' => '#663399',
  };

  $array = $m->toDArray();

  \var_dump(\is_array($array));
  \var_dump($array);
}
