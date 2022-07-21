/* eslint-disable */

const path = require('path')
const webpack = require('webpack')
const fs = require('fs-extra')
const chalk = require('chalk')

const config = require('./webpack.prod.conf')

import('../node_modules/ora/index.js')
  .then(({default: ora}) => {
    const spinner = ora('I am building...')
    spinner.color = 'green'
    spinner.start()

    const build = async () => {
      try {
        await fs.remove(path.resolve(__dirname, '../dist'))

        webpack(config, (werr, stats) => {
          console.log('\n')

          if (werr) {
            spinner.fail('Build error. 😭')
            throw werr
          }
          process.stdout.write(`${stats.toString({
            colors       : true,
            modules      : false,
            children     : false,
            chunks       : false,
            chunkModules : false
          })}\n\n`)

          spinner.succeed('Build complete. 🎉\n')
          console.log(chalk.yellow(' Tip: built files are meant to be served over an HTTP server.\n'
          + ' Opening index.html over file:// won\'t work.\n'))
        })
      } catch (err) {
        spinner.fail('error - fs.remove')
        throw err
      }
    }

    build()
  })
