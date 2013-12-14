<?php
/**
 * 
 * @author WebAsyst Team
 * @package wa-apps/stickies/api/v1
 */
class stickiesSheetGetInfoMethod extends stickiesAPIMethod
{
    public function execute()
    {
        $id = $this->get('id', true);
        $sheet_model = new stickiesSheetModel();
        $this->checkRights($id);
        $sheet = $sheet_model->getById($id);
        if (!$sheet) {
            throw new waAPIException('invalid_param', 'Sheet not found', 404);
        }
        $this->response = $sheet;
    }
}
