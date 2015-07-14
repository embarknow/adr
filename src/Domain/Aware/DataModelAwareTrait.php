<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Domain\DataModelInterface;

/**
 * Implementing classes can interact with DataModel instances
 */
trait DataModelAwareTrait
{
    /**
     * @var DataModelInterface
     */
    protected $dataModel;

    /**
     * Set a data model instance
     *
     * @param DataModelInterface $dataModel
     *
     * @return self
     */
    public function setDataModel(DataModelInterface $dataModel)
    {
        $this->dataModel = $dataModel;

        return $this;
    }

    /**
     * Get a data model instance
     *
     * @return DataModelInterface
     */
    public function getDataModel()
    {
        return $this->dataModel;
    }
}
