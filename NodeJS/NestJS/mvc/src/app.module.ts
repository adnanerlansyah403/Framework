/* eslint-disable */

import { Module } from '@nestjs/common';
import { ConfigModule, ConfigService } from '@nestjs/config';
import { TypeOrmModule } from '@nestjs/typeorm';
import { DataSource } from 'typeorm';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { User } from './user/entities/user.entity';
import { UserModule } from './user/user.module';
import { MateriModule } from './materi/materi.module';
import { Materi } from './materi/entities/materi.entity';

@Module({
  imports: [
    ConfigModule.forRoot({ isGlobal: true }),
    TypeOrmModule.forRootAsync({
      imports: [ConfigModule],
      useFactory: (configService: ConfigService) => ({
        type: 'postgres',
        host: process.env.DB_HOST,
        port: +configService.get<number>('DB_PORT'),
        username: 'postgres',
        password: 'postgres',
        database: 'farcapital',
        entities: [User, Materi],
        synchronize: true,
      }),
      inject: [ConfigService],
    }),
    UserModule,
    MateriModule,
  ],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {
  // constructor(private dataSource: DataSource)
}
