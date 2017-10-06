<?php
/**
 * Film Locations in San Francisco
 * A listing of filming locations of movies shot in San Francisco starting from 1924.
 * You'll find the titles, locations, fun facts, names of the director, writer, actors,
 * and studio for most of these films.
 * Reference : <https://data.sfgov.org/Culture-and-Recreation/Film-Locations-in-San-Francisco/yitu-d5am>
 *
 * @author: Figueiredo Luiz <lffigueiredo@gmail.com>
 */

namespace app\models;

use Yii;
use yii\base\Model;


class FilmLocation extends Model
{
    public $source = 'https://data.sfgov.org/resource/wwmu-gmzc.json';
    private $data;

    public function __construct()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->source);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
        $this->data = json_decode($result);
    }

    public function findOne($id)
    {
        if (isset($this->data[ $id ])) {
            return $this->data[ $id ];
        }

        return false;
    }

    public function findBy($key, $string)
    {
        $out = array ();
        foreach ($this->data as $id => $element) {
            //if (isset($element->$key) && $element->$key === $string) {
            if (isset($element->$key) && preg_match('~' . $string . '~i', $element->$key)) {
                $element->id = $id;
                $out[ ] = $element;
            }
        }

        return $out;
    }

    public function getAll($key)
    {
        $out = array ();
        foreach ($this->data as $element) {
            if (isset($element->$key) && !in_array($element->$key, $out)) {
                $out[ ] = $element->$key;
            }
        }

        return $out;
    }

    public function getFields()
    {
        $out = array ();
        foreach ($this->data as $item) {
            $out = array_merge($out, array_keys((array) $item));
        }

        return array_values(array_unique($out));
    }
}