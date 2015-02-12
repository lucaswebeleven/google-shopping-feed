<?php namespace LukeSnowden\GoogleShoppingFeed;

use LukeSnowden\GoogleShoppingFeed\Node;
use LukeSnowden\GoogleShoppingFeed\Containers\GoogleShopping;

class Item {

	CONST INSTOCK = 'in stock';

	CONST OUTOFSTOCK = 'out of stock';

	CONST PREORDER = 'preorder';

	CONST BRANDNEW = 'new';

	CONST USED = 'used';

	CONST REFURBISHED = 'refurbished';

	CONST MALE = 'male';

	CONST FEMALE = 'female';

	CONST UNISEX = 'unisex';

	CONST NEWBORN = 'newborn';

	CONST INFANT = 'infant';

	CONST TODDLER = 'toddler';

	CONST KIDS = 'kids';

	CONST ADULT = 'adult';

	CONST EXTRASMALL = 'XS';

	CONST SMALL = 'S';

	CONST MEDIUM = 'M';

	CONST LARGE = 'L';

	CONST EXTRALARGE = 'XL';

	CONST EXTRAEXTRALARGE = 'XXL';

	/**
	 * [$nodes description]
	 * @var array
	 */
	private $nodes = array();

	/**
	 * [$namespace description]
	 * @var string
	 */
	protected $namespace = 'http://base.google.com/ns/1.0';

	/**
	 * [__construct description]
	 */
	public function __construct() {

	}

	/**
	 * [id description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function id( $id ) {
		$node = new Node('id');
		$this->nodes['id'] = $node->value($id)->_namespace($this->namespace);
	}

	/**
	 * [title description]
	 * @param  [type] $title [description]
	 * @return [type]        [description]
	 */
	public function title( $title ) {
		$node = new Node('title');
		$this->nodes['title'] = $node->value($title)->addCdata();
	}

	/**
	 * [link description]
	 * @param  [type] $link [description]
	 * @return [type]       [description]
	 */
	public function link( $link ) {
		$node = new Node('link');
		$this->nodes['link'] = $node->value( rawurlencode( $link ) );
	}

	/**
	 * [price description]
	 * @param  [type] $price [description]
	 * @return [type]        [description]
	 */
	public function price( $price ) {
		$node = new Node('price');
		$this->nodes['price'] = $node->value($price)->_namespace($this->namespace);
	}

	/**
	 * [sale_price description]
	 * @param  [type] $salePrice [description]
	 * @return [type]            [description]
	 */
	public function sale_price( $salePrice ) {
		$node = new Node('sale_price');
		$this->nodes['sale_price'] = $node->value($salePrice)->_namespace($this->namespace);
	}

	/**
	 * [description description]
	 * @param  [type] $description [description]
	 * @return [type]              [description]
	 */
	public function description( $description ) {
		$node = new Node('description');
		$this->nodes['description'] = $node->value($description)->_namespace($this->namespace)->addCdata();
	}

	/**
	 * [condition description]
	 * @param  [type] $condition [description]
	 * @return [type]            [description]
	 */
	public function condition( $condition ) {
		$node = new Node('condition');
		$this->nodes['condition'] = $node->value($condition)->_namespace($this->namespace);
	}

	/**
	 * [expiration_date description]
	 * @param  [type] $expirationDate [description]
	 * @return [type]                 [description]
	 */
	public function expiration_date( $expirationDate ) {
		$node = new Node('expiration_date');
		$this->nodes['expiration_date'] = $node->value($expirationDate)->_namespace($this->namespace);
	}

	/**
	 * [image_link description]
	 * @param  [type] $imageLink [description]
	 * @return [type]            [description]
	 */
	public function image_link( $imageLink ) {
		$node = new Node('image_link');
		$this->nodes['image_link'] = $node->value( rawurlencode( $imageLink ) )->_namespace($this->namespace);
	}

	/**
	 * [brand description]
	 * @param  [type] $brand [description]
	 * @return [type]        [description]
	 */
	public function brand( $brand ) {
		$node = new Node('brand');
		$this->nodes['brand'] = $node->value($brand)->_namespace($this->namespace);
	}

	/**
	 * [mpn description]
	 * @param  [type] $mnp [description]
	 * @return [type]      [description]
	 */
	public function mpn( $mpn ) {
		$node = new Node('mpn');
		$this->nodes['mpn'] = $node->value($mpn)->_namespace($this->namespace);
	}

	/**
	 * [product_type description]
	 * @param  [type] $productType [description]
	 * @return [type]              [description]
	 */
	public function product_type( $productType ) {
		$node = new Node('product_type');
		$this->nodes['product_type'] = $node->value($productType)->_namespace($this->namespace)->addCdata();
	}

	/**
	 * [google_product_category description]
	 * @param  [type] $googleProductCategory [description]
	 * @return [type]                        [description]
	 */
	public function google_product_category( $googleProductCategory ) {
		$node = new Node('google_product_category');
		$this->nodes['google_product_category'] = $node->value($googleProductCategory)->_namespace($this->namespace)->addCdata();
	}

	/**
	 * [availability description]
	 * @param  [type] $availability [description]
	 * @return [type]               [description]
	 */
	public function availability( $availability ) {
		$node = new Node('availability');
		$this->nodes['availability'] = $node->value($availability)->_namespace($this->namespace);
	}

	/**
	 * [size description]
	 * @param  [type] $size [description]
	 * @return [type]       [description]
	 */
	public function size( $size ) {
		$node = new Node('size');
		$this->nodes['size'] = $node->value($size)->_namespace($this->namespace);
	}

	/**
	 * [gender description]
	 * @param  [type] $gender [description]
	 * @return [type]         [description]
	 */
	public function gender( $gender ) {
		$node = new Node('gender');
		$this->nodes['gender'] = $node->value($gender)->_namespace($this->namespace);
	}

	/**
	 * [age_group description]
	 * @param  [type] $ageGroup [description]
	 * @return [type]           [description]
	 */
	public function age_group( $ageGroup ) {
		$node = new Node('age_group');
		$this->nodes['age_group'] = $node->value($ageGroup)->_namespace($this->namespace);
	}

	/**
	 * [color description]
	 * @param  [type] $color [description]
	 * @return [type]        [description]
	 */
	public function color( $color ) {
		$node = new Node('color');
		$this->nodes['color'] = $node->value($color)->_namespace($this->namespace);
	}

	/**
	 * [item_group_id description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */

	public function item_group_id( $id ) {
		$node = new Node('item_group_id');
		$this->nodes['item_group_id'] = $node->value($id)->_namespace($this->namespace);
	}

	/**
	 * [nodes description]
	 * @return [type] [description]
	 */
	public function nodes() {
		return $this->nodes;
	}

	/**
	 * [clone description]
	 * @return [type] [description]
	 */
	public function cloneIt() {
		$item = GoogleShopping::createItem();
		$this->item_group_id( $this->nodes['mpn']->get('value') . '_group' );
		foreach( $this->nodes as $node ) {
			$item->{$node->get('name')}( $node->get('value') );
		}
		return $item;
	}

	/**
	 * [variant description]
	 * @return [type] [description]
	 */
	public function variant() {
		$item = $this->cloneIt();
		$item->item_group_id( $this->nodes['mpn']->get('value') . '_group' );
		return $item;
	}

}