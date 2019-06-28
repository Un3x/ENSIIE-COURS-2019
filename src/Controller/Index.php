<?php

namespace Rediite\Controller;

class Index 
{
    private $topicRepository;
    private $authService;

    public function __construct(
        \Rediite\Model\Repository\TopicRepository $topicRepository,
        \Rediite\Model\Service\AuthenticatorService $authService
    ) {
        $this->topicRepository = $topicRepository;
        $this->authService = $authService;
    }
    public function index()
    {        
        return [
            'topics' => $this->topicRepository->findAll()
        ];
    }

    public function mine()
    {
        if (!$this->authService->isAuthenticated()) 
        {
            return [
                'topics' => $this->topicRepository->findAllByUser(1)
            ];
        }

        return [
            'topics' => []
        ];

    }
}
