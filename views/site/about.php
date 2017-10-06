<?php
/**
 * @author: Figueiredo Luiz <lffigueiredo@gmail.com>
 */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="jumbotron text-center">
    <h1>About</h1>
</div>
<div class="row">

    <div class="col-lg-6">

        <table class="table table-responsive">
            <tbody>
            <tr>
                <th class="bg-dark text-light" role="row">Tech</th>
                <td>
                    <ul>
                        <li>Yii2</li>
                        <li>Bootstrap</li>
                        <li>jQuery</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th class="bg-dark text-light" role="row">Data</th>
                <td>DataSF (<a href="https://datasf.org">https://datasf.org</a>)<br>
                    <em>Film Locations in San Francisco</em><br>
                    https://data.sfgov.org/Culture-and-Recreation/Film-Locations-in-San-Francisco/yitu-d5am
                </td>
            </tr>
            </tbody>
        </table>

    </div>
    <div class="col-lg-6">
        <p>This page was created based on the <em>Coding challenge</em> described <a
                href="https://github.com/uber/coding-challenge-tools/blob/master/coding_challenge.md">here</a>.</p>
    </div>

</div>
