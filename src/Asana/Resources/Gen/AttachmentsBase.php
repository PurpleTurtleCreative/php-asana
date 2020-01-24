<?php

namespace Asana\Resources\Gen;

class AttachmentsBase {

    /**
     * @param Asana/Client client  The client instance
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /** Upload an attachment
     *
     * @param string $task_gid  (required) The task to operate on.
     * @param array $params
     * @param array $options
     * @return response
     */
    public function createAttachmentForTask($task_gid, $params = array(), $options = array()) {
        $path = "/tasks/{task_gid}/attachments";
        $path = str_replace($path,"{task_gid}", $task_gid);
        return $this->client->post($path, $params, $options);
    }

    /** Delete an attachment
     *
     * @param string $attachment_gid  (required) Globally unique identifier for the attachment.
     * @param array $params
     * @param array $options
     * @return response
     */
    public function deleteAttachment($attachment_gid, $params = array(), $options = array()) {
        $path = "/attachments/{attachment_gid}";
        $path = str_replace($path,"{attachment_gid}", $attachment_gid);
        return $this->client->delete($path, $params, $options);
    }

    /** Get an attachment
     *
     * @param string $attachment_gid  (required) Globally unique identifier for the attachment.
     * @param array $params
     * @param array $options
     * @return response
     */
    public function getAttachment($attachment_gid, $params = array(), $options = array()) {
        $path = "/attachments/{attachment_gid}";
        $path = str_replace($path,"{attachment_gid}", $attachment_gid);
        return $this->client->get($path, $params, $options);
    }

    /** Get attachments for a task
     *
     * @param string $task_gid  (required) The task to operate on.
     * @param array $params
     * @param array $options
     * @return response
     */
    public function getAttachmentsForTask($task_gid, $params = array(), $options = array()) {
        $path = "/tasks/{task_gid}/attachments";
        $path = str_replace($path,"{task_gid}", $task_gid);
        return $this->client->getCollection($path, $params, $options);
    }
}
