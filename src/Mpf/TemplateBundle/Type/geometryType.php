<?php
namespace Mpf\TemplateBundle\Type;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;
class geometryType extends Type
{
	public function getName()
	{
		return 'geometry';
	}
	public function canRequireSQLConversion()
	{
		return true;
	}
	public function getSqlDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
	{
		return "GEOMETRY";
	}
	public function convertToPHPValue($value, AbstractPlatform $platform)
	{
		return $value;
	}
	public function convertToDatabaseValueSQL($sqlExpr, AbstractPlatform $platform)
	{
		return sprintf('to_geometry(%s)', $sqlExpr);
	}
	public function convertToDatabaseValue($value, AbstractPlatform $platform)
	{
		if (is_array($value)) {
			$value = implode(" ", $value);
		}
		return $value;
	}
}
