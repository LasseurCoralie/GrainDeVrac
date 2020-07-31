import styled from 'styled-components';
import theme from '../../../theme/theme';


const HeaderStyled = styled.header`

  display: flex;
  flex-direction: row;
  justify-content: space-between;
  background-color: ${theme.colors.orange};

  div.logo {
    position: absolute;
    z-index: 21;
    left: 0;
    height: 77px;
    width: 77px;
    padding: 5px;
    text-align: center;
    background-color: ${theme.colors.orange};
    border: 1px solid ${theme.colors.black};
    box-sizing: content-box;

    img {
      height: 90%;
    }
  }

  div.menu {
    z-index: 20;
    position: fixed;
    right: 0;
    text-align: right;
    
    nav.closedMenu {
      display: none;
    }

    nav.navMenu {
      display: block;
      background-color: ${theme.colors.orange};
      width: 100vw;
      position: fixed;
      z-index: 19;
      left: 0;
      top: 0;
      border-bottom: 1px solid ${theme.colors.black};

      ul {
        text-align: center;
        margin-top: 2em;

        li {
          margin: 1em 0;
          font-size: 1.2em;
          a {
            text-decoration: none;
            color: white;
          }
        }
      }
    }

    button {
      background-color: ${theme.colors.orange};
      border: 1px solid ${theme.colors.black};
      padding: 1.5em;
      transition: transform .5s;
      position: relative;
      z-index: 20;

      span.squares-menu {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        height: 39px;
        width: 39px;
        transition: .5s;

        div.square {
          height: 9px;
          width: 9px;
          border: 3px solid white;
          border-radius: 5px;
          transition: all .5s;
          box-sizing: content-box;
        }
      }
    }

    button.ouverture {
      border: 1px solid ${theme.colors.orange};

      span.squares-menu {
        transform: rotate(45deg);
      }
    }

  }

  // DESKTOP SCREEN

  @media (min-width: 1100px) {
    z-index: 1000;

    div.menu {
      width: calc(100% - 89px);
      border-bottom: 1px solid ${theme.colors.black};
      background-color: white;
      position: unset;

      button.buttonMenu {
        display: none;
      }

      nav.navMenu {
        background-color: white;
        display: block;

        ul {
          margin: 0;
          display: flex;
          justify-content: right;
          flex-wrap: wrap;
          padding: 0 1em;

          li {
            margin: .5em;

            a {
              color: ${theme.colors.black};
              text-decoration: none;
              position: relative;
              font-size: 1rem;

              &:before {
                content: '';
                position: absolute;
                width: 100%;
                height: 2px;
                background-color: ${theme.colors.purple};
                margin-top: .5em;
                bottom: 0px;
                opacity: 0;
                transition: all .3s;
              }

              &:hover, &:active {
                color: ${theme.colors.purple};
                
                &:before {
                  bottom: -5px;
                  opacity: 1;
                }
              }
            }
          }
        }

      }
    }
  }
  
`;

export default HeaderStyled;