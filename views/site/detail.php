<?php
/**
 * @author: Figueiredo Luiz <lffigueiredo@gmail.com>
 */

$this->title = 'Details : '.$data->title;
$this->params['breadcrumbs'][] = 'Details';
$this->params['breadcrumbs'][] = $data->title;

?>

<h2><?= $data->title ?>
    <small>(<?= $data->release_year ?>)</small>
</h2>


<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Entry Detail</a></li>
    <li><a data-toggle="tab" href="#other">All Locations</a></li>
</ul>

<div class="tab-content">

    <div id="home" class="tab-pane fade in active">

        <table class="table table-inverse table-hover">
            <tbody>
            <?php if (isset($data->locations)) : ?>
                <tr>
                    <th scope="row">Location</th>
                    <td><?= $data->locations ?></td>
                </tr>
            <?php endif; ?>
            <?php if (isset($data->fun_facts)) : ?>
                <tr>
                    <th scope="row">Facts</th>
                    <td><?= $data->fun_facts ?></td>
                </tr>
            <?php endif; ?>



            <?php if (isset($data->director)) : ?>
                <tr>
                    <th scope="row">Director</th>
                    <td><?= $data->director ?></td>
                </tr>
            <?php endif; ?>
            <?php if (isset($data->actor_1)) : ?>
                <tr>
                    <th scope="row">Actors</th>
                    <td>
                        <?= $data->actor_1 ?>
                        <?php if (isset($data->actor_2)) {
                            echo ', ' . $data->actor_2;
                        } ?>
                        <?php if (isset($data->actor_3)) {
                            echo ', ' . $data->actor_3;
                        } ?>
                    </td>
                </tr>
            <?php endif; ?>

            <?php if (isset($data->writer)) : ?>
                <tr>
                    <th scope="row">Writer</th>
                    <td><?= $data->writer ?></td>
                </tr>
            <?php endif; ?>
            <?php if (isset($data->production_company)) : ?>
                <tr>
                    <th scope="row">Production</th>
                    <td><?= $data->production_company ?></td>
                </tr>
            <?php endif; ?>
            <?php if (isset($data->distributor)) : ?>
                <tr>
                    <th scope="row">Distribution</th>
                    <td><?= $data->distributor ?></td>
                </tr>
            <?php endif; ?>


            </tbody>
        </table>
    </div>
    <div id="other" class="tab-pane fade">
        <p>All locations used for the same movie</p>
        <ul class="list-group">
            <?php foreach ($other as $item) : ?>
                <?php if (isset($item->locations)) : ?>
                    <li class="list-group-item"><?= $item->locations; ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
