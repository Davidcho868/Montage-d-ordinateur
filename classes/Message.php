<?php
class Message
{
	protected int $idMessage;
	protected string $texte;
	protected string $dateMessage;
	protected bool $estLu;
	protected ?string $userName = null;

	public function getTexte(): string
	{
		return $this->texte;
	}
	public function setTexte(string $texte): self
	{
		$this->texte = $texte;
		return $this;
	}

	public function getDateMessage(): string
	{
		return $this->dateMessage;
	}
	public function setDateMess(string $dateMessage): self
	{
		$this->dateMessage = $dateMessage;
		return $this;
	}

	public function getIdMessage(): int
	{
		return $this->idMessage;
	}
	public function setIdMessage(int $idMessage): self
	{
		$this->idMessage = $idMessage;
		return $this;
	}

	public function getEstLu(): bool
	{
		return $this->estLu;
	}
	public function setEstLu(bool $estLu): self
	{
		$this->estLu = $estLu;
		return $this;
	}

	public function getUserName(): ?string
	{
		return $this->userName;
	}
	public function setUserName(?string $userName): self
	{
		$this->userName = $userName;
		return $this;
	}
}
?>