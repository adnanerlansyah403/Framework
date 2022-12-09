import { CreateUserDto } from 'src/dto/users.dtos';
import { User } from 'src/Entities/user.entity';
import { Repository } from 'typeorm';
export declare class UserService {
    private readonly userRepository;
    constructor(userRepository: Repository<User>);
    getUsers(): Promise<User[]>;
    createUser(createUserDto: CreateUserDto): Promise<User>;
    updateUser(userId: number, request: CreateUserDto): Promise<void>;
    findUsersById(id: number): Promise<User>;
}
