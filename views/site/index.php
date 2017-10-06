<?php
/**
 * @author: Figueiredo Luiz <lffigueiredo@gmail.com>
 */

$this->title = 'Movie Location Search';
?>


<div class="col-lg-8 col-lg-push-2">
    <div class="input-group input-group-lg">
        <div class="input-group-btn" id="searchSelector">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                <span id="s-selected">Movie Title</span> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#" id="s-title">Movie Title</a></li>
                <li><a href="#" id="s-director">Director</a></li>
                <li><a href="#" id="s-locations">Location</a></li>
                <li><a href="#" id="s-production_company">Production Company</a></li>
                <li><a href="#" id="s-release_year">Release Year</a></li>
            </ul>
        </div>

        <input type="hidden" id="search_type" value="title"/>
        <input type="text" id="search_key" class="form-control"/>

    </div>

    <hr>

    <div id="suggestions" class="suggestionsBox" style="display: none;">
        <div id="suggestionsList" class="suggestionList"></div>
    </div>


</div>