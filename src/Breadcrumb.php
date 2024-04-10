<?php
namespace CoreUI;


/**
 *
 */
class Breadcrumb {

    private $id      = '';
    private $divider = null;
    private $items   = [];


    /**
     * @param string|null $id
     */
    public function __construct(string $id = null) {

        if ($id) {
            $this->id = $id;
        } else {
            $this->id = crc32(uniqid());
        }
    }


    /**
     * Установка разделителя
     * @param string $divider
     * @return self
     */
    public function setDivider(string $divider): self {

        $this->divider = $divider;
        return $this;
    }


    /**
     * Получение разделителя
     * @return string|null
     */
    public function getDivider():? string {

        return $this->divider;
    }


    /**
     * Добавление записи
     * @param string      $title
     * @param string|null $url
     * @return self
     */
    public function addItem(string $title, string $url = null): self {

        $item = [
            'title' => $title,
        ];

        if ($url !== null) {
            $item['url'] = $url;
        }

        $this->items[] = $item;

        return $this;
    }


    /**
     * Формирует данные
     * @return array
     */
    public function toArray(): array {

        $result = [
            'component' => 'coreui.breadcrumb',
            'id'        => $this->id,
            'items'     => $this->items,
        ];

        if ($this->divider !== null) {
            $result['divider'] = $this->getDivider();
        }


        return $result;
    }
}