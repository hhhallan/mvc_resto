<?php
namespace App\Model;

use Core\Model\Model;

/**
 * @method ReadAll() | Récupère tous les articles
 * @method ReadOne(int $id) | Retourne un article en fonction de son id
 * @method delete(int $id) | Supprime un article en fonction de son id
 * @method create($data) | Enregistre un article dans la BDD
 */
class MealModel extends Model{

    /**
     * Nom de la table
     *
     * @var string
     */
    protected $table = "meal";

    /**
     * Récupère tous les meals et les affiche
     *
     * @param int $id
     * @param array $data
     */
    public function listMeal(int $id, array $data)
    {
        $meals = "SELECT * FROM meal WHERE id = $id";
        $this->db->postData($meals, $data);
    }


    /**
     * Met à jour un article dans la BDD
     *
     * @param integer $id
     * @param array $data
     */
    public function update(int $id, array $data)
    {
        $statement = "UPDATE meal SET 
                        Name = :name,
                        Description = :description,
                        Photo = :photo,
                        QuantityInStock = :quantityinstock,
                        BuyPrice = :buyprice,
                        SalePrice = :saleprice
                        WHERE Id = $id";

        $this->db->postData($statement, $data);
    }

    /**
     * Retourne les 5 articles les plus récents
     *
     * @return array
     */
    public function getLast5():array
    {
        $statement = "SELECT * FROM meal ORDER BY Id DESC LIMIT 5";

        return $this->db->getData($statement);
    }

}