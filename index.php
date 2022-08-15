<?php
// $n = 5;
// for ($i = 1; $i <= $n; $i++) {
//     for ($i2 = $n; $i2 > $i; $i2--) {
//         echo '_';
//     }
//     for ($i2 = 1; $i2 <= $i; $i2++) {

//         echo '*';
//     }
//     for ($i2 = 2; $i2 <= $i; $i2++) {

//         echo '*';
//     }
//     for ($i2 = $n; $i2 > $i; $i2--) {
//         echo '_';
//     }
//     echo '<br>';
//     echo "\n";
// }


$array = [
  [
    'item' => 'product 1',
    'description' => 'description 1',
    'price' => 1000,
    'currency' => 'RUB',
    'discount' => 'false',
    'currency-with-discount' => 999
  ],
  [
    'item' => 'product 2',
    'description' => 'description 2',
    'price' => 2000,
    'currency' => 'RUB',
    'discount' => 'true',
    'currency-with-discount' => 1999
  ],
  [
    'item' => 'product 1',
    'description' => 'description 1',
    'price' => 3000,
    'currency' => 'RUB',
    'discount' => 'false',
    'currency-with-discount' => 2999
  ],
];
?>

<div>
  <?php foreach ($array as $item) : ?>
    <?php foreach ($item as $key => $value) : ?>
      <span>
        <?= $key ?> :
        <?= $value ?> -
        <?= $item[$key] ?> <br>
      </span>

    <?php endforeach ?> <br>
  <?php endforeach ?>

  <?php foreach ($array as $item) : ?>
    <?php foreach ($item as $key => $value) : ?>
      <table>
        <thead>
          <tr>
            <th>
              <?= $key ?>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $value ?></td>
          </tr>
        </tbody>
      </table>
    <?php endforeach ?> <br>
  <?php endforeach ?>
</div>