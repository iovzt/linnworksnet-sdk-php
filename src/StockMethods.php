<?php

namespace Linnworks;

use Linnworks\classes\StockItemFull;

/**
 * StockMethods class.
 * 
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class StockMethods extends BaseMethods
{

    /**
     * @todo
     * 
     * @param string $keyword
     * @param boolean $loadCompositeParents
     * @param boolean $loadVariationParents
     * @param int $entriesPerPage
     * @param int $pageNumber
     * @param StockInformationDataRequirement[] $dataRequirements
     * @param StockInformationSearchType[] $searchTypes
     * @param string $sessionToken
     * @param string $sessionServer
     * @return StockItemFull[]
     */
    public static function getStockItemsFull($keyword, $loadCompositeParents, $loadVariationParents, $entriesPerPage, $pageNumber, Array $dataRequirements = [], Array $searchTypes = [], $sessionToken, $sessionServer)
    {
        $data = [
            'keyword' => $keyword,
            'loadCompositeParents' => boolval($loadCompositeParents),
            'loadVariationParents' => boolval($loadVariationParents),
            'entriesPerPage' => intval($entriesPerPage),
            'pageNumber' => intval($pageNumber),
            'dataRequirements' => $dataRequirements,
            'searchTypes' => $searchTypes
        ];
        return static::getObjectArrayResponse(StockItemFull::className(), 'Stock/GetStockItemsFull', $data, $sessionToken, $sessionServer);
    }

}
