<?php

namespace Linnworks\classes;

/**
 * Enum
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
abstract class Enum
{

    /**
     * Mode types
     */
    const MODE_TYPE_ALL = 'All';
    const MODE_TYPE_LISTED = 'Listed';
    const MODE_TYPE_NOT_LISTED = 'NotListed';
    const MODE_TYPE_ERRORS = 'Errors';

    /**
     * Listing types
     */
    const LISTING_TYPE_ALL = 'All';
    const LISTING_TYPE_VARIATIONS = 'Variations';
    const LISTING_TYPE_NON_VARIATIONS = 'NonVariations';
    const LISTING_TYPE_SINGLE_ITEMS = 'SingleItems';

    /**
     * Include archived values
     */
    const INCLUDE_ARCHIVED_ALL = 'All';
    const INCLUDE_ARCHIVED_YES = 'Archived';
    const INCLUDE_ARCHIVED_NO = 'NotArchived';

    /**
     * Filter name types
     */
    const FILTER_NAME_TYPE_GENERAL = 'General';
    const FILTER_NAME_TYPE_SKU = 'SKU';
    const FILTER_NAME_TYPE_TITLE = 'Title';
    const FILTER_NAME_TYPE_RETAIL_PRICE = 'RetailPrice';
    const FILTER_NAME_TYPE_PURCHASE_PRICE = 'PurchasePrice';
    const FILTER_NAME_TYPE_TRACKED = 'Tracked';
    const FILTER_NAME_TYPE_BARCODE = 'Barcode';
    const FILTER_NAME_TYPE_VARIATION_GROUP_NAME = 'VariationGroupName';
    const FILTER_NAME_TYPE_AVAILABLE = 'MinimumLevel';
    const FILTER_NAME_TYPE_MINIMUM_LEVEL = 'MinimumLevel';
    const FILTER_NAME_TYPE_IN_ORDER = 'InOrder';
    const FILTER_NAME_TYPE_STOCK_LEVEL = 'StockLevel';
    const FILTER_NAME_TYPE_STOCK_VALUE = 'StockValue';
    const FILTER_NAME_TYPE_DUE = 'Due';
    const FILTER_NAME_TYPE_BIN_RACK = 'BinRack';
    const FILTER_NAME_TYPE_CATEGORY = 'Category';
    const FILTER_NAME_TYPE_CHANNEL_SKU = 'ChannelSKU';
    const FILTER_NAME_TYPE_SUPPLIER_CODE = 'SupplierCode';
    const FILTER_NAME_TYPE_EBAY_ID = 'eBayId';
    const FILTER_NAME_TYPE_AMAZON_ASIN = 'AmazonASIN';
    const FILTER_NAME_TYPE_IMAGE = 'Image';
    const FILTER_NAME_TYPE_EXTENDED_PROPERTY = 'ExtendedProperty';
    const FILTER_NAME_TYPE_EXTENDED_PROPERTY_NAME = 'ExtendedPropertyName';
    const FILTER_NAME_TYPE_CHANNEL = 'Channel';
    const FILTER_NAME_TYPE_CREATED_DATE = 'CreatedDate';
    const FILTER_NAME_TYPE_MODIFIED_DATE = 'ModifiedDate';
    const FILTER_NAME_TYPE_SERIAL_NUMBER_SCAN_REQUIRED = 'SerialNumberScanRequired';
    const FILTER_NAME_TYPE_BATCH_NUMBER_SCAN_REQUIRED = 'BatchNumberScanRequired';
    const FILTER_NAME_TYPE_BATCH_TYPE = 'BatchType';
    const FILTER_NAME_TYPE_BATCH_NUMBER = 'BatchNumber';

    /**
     * Field types
     */
    const FIELD_TYPE_INT = 'Int';
    const FIELD_TYPE_DOUBLE = 'Double';
    const FIELD_TYPE_STRING = 'String';
    const FIELD_TYPE_BOOLEAN = 'Boolean';
    const FIELD_TYPE_SELECT = 'Select';
    const FIELD_TYPE_DATE = 'Date';
    const FIELD_TYPE_CHANNEL = 'Channel';
    const FIELD_TYPE_OTHER = 'Other';

    /**
     * Condition types
     */
    const CONDITION_TYPE_EQUALS = 'Equals';
    const CONDITION_TYPE_CONTAINS = 'Contains';
    const CONDITION_TYPE_LESS = 'Less';
    const CONDITION_TYPE_GREATER = 'Greater';
    const CONDITION_TYPE_NOT_EQUALS = 'NotEquals';
    const CONDITION_TYPE_NOT_CONTAINS = 'NotContains';
    const CONDITION_TYPE_EXISTS = 'Exists';
    const CONDITION_TYPE_LISTED = 'Listed';
    const CONDITION_TYPE_NOT_LISTED = 'NotListed';
    const CONDITION_TYPE_HAS_ERROR = 'HasError';
    const CONDITION_TYPE_ONLY_ERRORS = 'OnlyErrors';
    const CONDITION_TYPE_NO_ERRORS = 'NoErrors';
    const CONDITION_TYPE_LAST_DAYS = 'LastDays';
    const CONDITION_TYPE_OLDER_THAN = 'OlderThan';

}
