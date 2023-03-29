<?php 
class Message {
    private $sender;
    private $recipient;
    private $messageText;
    private $creationTime;
    private $messageType;

    public function __construct(User $sender, User $recipient, $messageText, $messageType) {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->messageText = $messageText;
        $this->creationTime = time();
        $this->messageType = $messageType;
    }

    public function getSenderFullName() {
        return $this->sender->getFullName();
    }

    public function getRecipientFullName() {
        return $this->recipient->getFullName();
    }

    public function getMessageText() {
        return $this->messageText;
    }

    public function getMessageType() {
        return $this->messageType;
    }
}
?>