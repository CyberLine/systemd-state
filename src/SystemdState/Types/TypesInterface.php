<?php

namespace CyberLine\SystemdState\Types;

interface TypesInterface
{
    public const TYPE_SERVICE = 'service';
    public const TYPE_TARGET = 'target';
    public const TYPE_TIMER = 'timer';
    public const TYPE_SLICE = 'slice';
    public const TYPE_SOCKET = 'socket';
    public const TYPE_PATH = 'path';
    public const TYPE_DEVICE = 'device';
    public const TYPE_MOUNT = 'mount';
    public const TYPE_AUTOMOUNT = 'automount';
    public const TYPE_SCOPE = 'scope';
    public const TYPE_SWAP = 'swap';
    public const TYPE_SYSTEMD = 'systemd';

    public const ALLOWED_TYPES = [
        self::TYPE_SERVICE,
        self::TYPE_TARGET,
        self::TYPE_TIMER,
        self::TYPE_SLICE,
        self::TYPE_SOCKET,
        self::TYPE_PATH,
        self::TYPE_DEVICE,
        self::TYPE_MOUNT,
        self::TYPE_AUTOMOUNT,
        self::TYPE_SCOPE,
        self::TYPE_SWAP,
        self::TYPE_SYSTEMD,
    ];

    public function getId();
}
