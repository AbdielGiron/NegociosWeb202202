<?php
/**
 * PHP Version 7
 * Modelo de Datos para modelo
 *
 * @category Data_Model
 * @package  Models${1:modelo}
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  Comercial http://
 *
 * @version 1.0.0
 *
 * @link http://url.com
 */

namespace Dao\Mnt;

use Dao\Table;

/**
 * Modelo de Datos para la tabla de Scores
 *
 * @category Data_Model
 * @package  Dao.Table
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  Comercial http://
 *
 * @link http://url.com
 */
class Scores extends Table
{
    /*
        `scoreid` BIGINT(18) NOT NULL AUTO_INCREMENT,
        `scoredsc` VARCHAR(128) NULL,
        `scoreauthor` VARCHAR(256) NULL,
        `scoregenre` VARCHAR(256) NULL,
        `scoreyear` INT NULL,
        `scoresales` INT NULL,
        `scoreprice` DECIMAL(13,2) NULL,
        `scoredocurl` VARCHAR(256) NULL,
        `scoreest` CHAR(3) NULL,
        PRIMARY KEY (`scoreid`));
    */
    /**
     * Obtiene todos los registros de Scores
     *
     * @return array
     */
    public static function getAll()
    {
        $sqlstr = "Select * from Scores;";
        return self::obtenerRegistros($sqlstr, array());
    }
    /**
     * Get Producto By Id
     *
     * @param int $scoreid Codigo del Producto
     *
     * @return array
     */
    public static function getById(int $scoreid)
    {
        $sqlstr = "SELECT * from `Scores` where scoreid=:scoreid;";
        $sqlParams = array("scoreid" => $scoreid);
        return self::obtenerUnRegistro($sqlstr, $sqlParams);
    }

    public static function insert(
        $scoredsc,
        $scoreauthor,
        $scoregenre,
        $scoreyear,
        $scoresales,
        $scoreprice,
        $scoredocurl,
        $scoreest,
    ) {
        $sqlstr =" INSERT INTO `scores`
(`scoredsc`, `scoreauthor`,
`scoregenre`, `scoreyear`, `scoresales`,
`scoreprice`, `scoredocurl`, `scoreest`)
VALUES
(:scoredsc, :scoreauthor,
:scoregenre, :scoreyear, :scoresales,
:scoreprice, :scoredocurl, :scoreest);
";


        $sqlParams = [
            "scoredsc" => $scoredsc ,
            "scoreauthor" => $scoreauthor ,
            "scoregenre" => $scoregenre ,
            "scoreyear" => $scoreyear ,
            "scoresales" => $scoresales ,
            "scoreprice" => $scoreprice ,
            "scoredocurl" =>  $scoredocurl ,
            "scoreest" => $scoreest
        ];
        return self::executeNonQuery($sqlstr, $sqlParams);
    }
   
    public static function update(
        $scoredsc,
        $scoreauthor,
        $scoregenre,
        $scoreyear,
        $scoresales,
        $scoreprice,
        $scoredocurl,
        $scoreest,
        $scoreid
    ) {
        $sqlstr = "UPDATE `scores` SET
`scoredsc` = :scoredsc, `scoreauthor` = :scoreauthor, 
`scoregenre` = :scoregenre, `scoreyear` = :scoreyear,`scoresales` = :scoresales, 
`scoreprice` = :scoreprice, `scoredocurl` = :scoredocurl,`scoreest` = :scoreest
WHERE `scoreid` = :scoreid;";
        
        $sqlParams = array(
            "scoredsc" => $scoredsc ,
            "scoreauthor" => $scoreauthor ,
            "scoregenre" => $scoregenre ,
            "scoreyear" => $scoreyear ,
            "scoresales" => $scoresales ,
            "scoreprice" => $scoreprice ,
            "scoredocurl" => $scoredocurl ,
            "scoreest" => $scoreest,
            "scoreid" => $scoreid
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

   
    public static function delete($scoreid)
    {
        $sqlstr = "DELETE from `Scores` where scoreid = :scoreid;";
        $sqlParams = array(
            "scoreid" => $scoreid
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

}