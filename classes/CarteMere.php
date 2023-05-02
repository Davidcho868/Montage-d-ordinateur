<?php
class CarteMere extends Composant {
    const CARTE_MERE_FORMAT = ["mini-ITX", "micro-ATX", "ATX", "E-ATX"];
    protected string $socket;
    protected string $format;

    public function getSocket(): string
    {
        return $this->socket;
    }

    public function setSocket(string $socket): self
    {
        $this->socket = $socket;
        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }
    public function setFormat(string $format): self
    {
        $this->format = $format;
        return $this;
    }
}
?>